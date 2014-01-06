<?php
namespace Kitsunet\Littleriver\Domain\Service;

/**
 * Class MusicBrainzService
 *
 * @package Kitsunet\Littleriver\Domain\Service
 * @singleton
 */
class MusicBrainzService implements \TYPO3\CMS\Core\SingletonInterface {


	/**
	 * Fetch the data from musicbrainz services and returns an array with the most important information
	 *
	 * @param string $id Musicbrainz release id
	 * @return array
	 */
	public function fetchReleaseData($id) {
		$xml = $this->webServiceCall('release', $id, 'inc=artist-credits%2Blabels%2Bdiscids%2Brecordings');

		$releases = $xml->xpath('//mb:release');
		$result = array();

		if (count($releases)) {
			$release = $releases[0];
			$release->registerXPathNamespace('mb', 'http://musicbrainz.org/ns/mmd-2.0#');

			$tracks = array();
			foreach ($release->xpath('//mb:track/mb:recording/mb:title') as $title) {
				$tracks[] = (string)$title;
			}

			$result = array(
				'title' => (string)$release->title,
				'date' => (string)$release->date,
				'coverart' => ((string)$release->{'cover-art-archive'}->artwork) == 'true' ? TRUE : FALSE,
				'tracks' => $tracks
			);
		}

		return $result;
	}

	/**
	 * @param strin $entityName
	 * @param string $entityId
	 * @param string $queryParameters
	 * @return \SimpleXMLElement
	 */
	protected function webServiceCall($entityName, $entityId, $queryParameters = NULL) {
		$xmlString = file_get_contents('http://musicbrainz.org/ws/2/' . $entityName . '/' . $entityId . ($queryParameters !== NULL ? ('?' . $queryParameters) : ''));
		$xml = simplexml_load_string($xmlString);
		$xml->registerXPathNamespace('mb', 'http://musicbrainz.org/ns/mmd-2.0#');
		return $xml;
	}
}
?>
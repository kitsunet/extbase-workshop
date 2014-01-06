<?php
namespace Kitsunet\Littleriver\Controller;


use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class ProductController
 * @package Kitsunet\Littleriver
 */
class ProductController extends ActionController {

	/**
	 * @inject
	 * @var \Kitsunet\Littleriver\Domain\Service\MusicBrainzService
	 */
	protected $musicBrainzService;

	public function listAction() {

	}

	public function showAction() {

	}

	public function importAction() {
		$releaseData = $this->musicBrainzService->fetchReleaseData('5575df00-ddaf-39c7-a606-6789dc3fb1f2');
		return '<pre>' . var_export($releaseData, TRUE) . '</pre>';
	}


}
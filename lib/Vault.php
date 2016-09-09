<?php
/**
 * Nextcloud - passman
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Sander Brand <brantje@gmail.com>
 * @copyright Sander Brand 2016
 */

namespace OCA\Passman;
use OCP\Activity\IManager;
use OCP\DB\QueryBuilder\IQueryBuilder;
use OCP\IDBConnection;
use OCP\IL10N;
/**
 * @brief Class for managing the data in the activities
 */
class Vault {

	/** @var IDBConnection */
	protected $connection;
	/**
	 * @param IManager $activityManager
	 * @param IDBConnection $connection
	 */
	public function __construct(IDBConnection $connection) {
		$this->connection = $connection;
	}

	public function get(){

	}

	public function save(Vault $vault){

	}
}
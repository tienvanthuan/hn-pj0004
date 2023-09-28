<?php

class Pressure_Validate_Functions {

	public $has_error;
	public $messages;

	public function __construct() {
		$this->has_error = false;
		$this->messages  = [];
	}

	/**
	 * 実際にチェックを行う関数たち
	 */

	// 管理者IDは「admin」以外
	public function not_admin() {
		$administrators = new WP_User_Query(
			[
				'role'    => 'Administrator',
				'orderby' => 'ID',
			]
		);
		foreach ( $administrators->results as $user ) {
			if ( 'admin' === $user->user_login ) {
				$this->has_error  = true;
				$this->messages[] = "管理者 (ユーザーID: {$user->ID}) のユーザー名が 'admin' です";
			}
		}
	}

	// ログインパスワードを複雑に。
	public function nontrivial_password() {
		$trivial_passwords = [
			'password',
			'pass',
			'1234',
			'admin',
			'root',
		];

		$users = new WP_User_Query(
			[
				'orderby' => 'ID',
			]
		);

		foreach ( $users->results as $user ) {
			foreach ( $trivial_passwords as $pass ) {
				if ( wp_check_password( $pass, $user->user_pass, $user->ID ) ) {
					$this->has_error = true;
					$this->messages[] = "ユーザー【{$user->user_login}】(ID: {$user->ID}) のパスワードが簡単すぎます";
					break;
				}
			}
		}
	}

	// 必須のプラグイン有効化
	public function required_plugins() {
		$required_plugins_list = [
			'WP Multibyte Patch',
			'Akismet Anti-Spam',
			'SiteGuard WP Plugin',
		];

		$activated_plugins_list_pre = array_filter(
			get_plugins(),
			function ( $key ) {
				return is_plugin_active( $key );
			},
			ARRAY_FILTER_USE_KEY
		);
		$activated_plugins_list     = array_map(
			function ( $value ) {
				return $value['Name'];
			},
			$activated_plugins_list_pre
		);

		foreach ( $required_plugins_list as $plugin ) {
			if ( ! in_array( $plugin, $activated_plugins_list ) ) {
				$this->has_error  = true;
				$this->messages[] = "必須プラグイン【{$plugin}】が有効化されていません";
			}
		}
	}

	// 未使用プラグインを削除
	public function remove_redundant_plugins() {
		$inactive_plugins_list_pre = array_filter(
			get_plugins(),
			function ( $key ) {
				return ! is_plugin_active( $key );
			},
			ARRAY_FILTER_USE_KEY
		);
		$inactive_plugins_list = array_map(
			function ( $value ) {
				return $value['Name'];
			},
			$inactive_plugins_list_pre
		);

		if ( ! empty( $inactive_plugins_list ) ) {
			$this->has_error = true;
			foreach ( $inactive_plugins_list as $plugin ) {
				$this->messages[] = "未使用のプラグイン【{$plugin}】があります";
			}
		}
	}
}

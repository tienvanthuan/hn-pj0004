<?php

class Pressure_Config {
	// プラグインの最終更新日(公開用)
	const PLUGIN_UPDATED = '2019/09/18';

	/**
	 * 表示設定
	 */

	// プラグイン画面の<title>
	const PAGE_TITLE = 'Pressure Settings';

	// WP管理画面サイドメニューのタイトル
	const MENU_TITLE = 'Pressure Settings';

	// WP管理画面サイドメニューのアイコン
	const ICON_URL = '';

	// WP管理画面サイドメニューの表示位置
	const MENU_POSITION = '82';

	// プラグインの管理画面URL
	const SLUG = 'pressure-settings';

	/**
	 * 権限
	 */

	// プラグインを操作できる権限
	const CAPABILITY = 'administrator';

	/**
	 * チェック項目
	 */

	// 接続情報
	const OPTION_CONNECTION_NOT_ADMIN = 'not_admin';
	const OPTION_NONTRIVIAL_PASSWORD  = 'nontrivial_password';

	// プラグイン
	const OPTION_REQUIRED_PLUGINS = 'required_plugins';
	const OPTION_REMOVE_REDUNDANT_PLUGINS = 'remove_redundant_plugins';
}

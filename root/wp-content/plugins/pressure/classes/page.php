<?php

class Pressure_Page {
	public static function display_plugin_admin_page() {
		$functions = new Pressure_Functions();

		$plugin = [];
		$plugin['version'] = Pressure::plugin_version();
		$plugin['updated'] = Pressure_Config::PLUGIN_UPDATED;

		$content = <<<HTML

<main id="pressure-index">
	<div class="wrap">
		<h2>Pressure</h2>

		<p style="text-align: right">バージョン: {$plugin['version']}<br>最終更新日: {$plugin['updated']}</p>

		<h3>接続情報</h3>
			<table>
				{$functions->column_template( '管理者IDは「admin」以外', Pressure_Config::OPTION_CONNECTION_NOT_ADMIN )}
				{$functions->column_template( 'ログインパスワードを複雑に' , Pressure_Config::OPTION_NONTRIVIAL_PASSWORD)}
			</table>

		<h3>プラグイン</h3>
			<table>
				{$functions->column_template( '必須のプラグイン有効化', Pressure_Config::OPTION_REQUIRED_PLUGINS)}
				{$functions->column_template( '未使用ブラグインを削除', Pressure_Config::OPTION_REMOVE_REDUNDANT_PLUGINS)}
			</table>
	</div>
</main>
HTML;

		echo $content;
	}
}

<?php

class Pressure_Functions {
	// 管理画面のサイドバーにメニューを追加
	public static function add_plugin_admin_menu() {
		add_menu_page(
			Pressure_Config::PAGE_TITLE,
			Pressure_Config::MENU_TITLE,
			Pressure_Config::CAPABILITY,
			Pressure_Config::SLUG,
			'Pressure_Page::display_plugin_admin_page',
			Pressure_Config::ICON_URL,
			Pressure_Config::MENU_POSITION
		);

		add_action(
			'admin_head',
			function() {
				wp_enqueue_style( 'pressure-style', plugins_url( '../assets/css/style.css', __FILE__ ) );
			}
		);
	}

	// 管理画面 設定ページ カラムのテンプレート
	public function column_template( $title, $option_name ) {
		$validator = new Pressure_Validate_Functions();

		if ( method_exists( $validator, $option_name ) ) {
			$validator->{$option_name}();
		} else {
			$validator->has_error  = true;
			$validator->messages[] = 'チェックを実行する関数が定義されていません';
		}

		$html  = '';
		$html .= ( $validator->has_error ) ? '<tr style="color:#FF0000;">' : '<tr>';
		$html .= "<td>{$title}</td>";
		$html .= '<td>';
		if ( false === $validator->has_error ) {
			$html .= '<p>エラーは検出されませんでした</p>';
		}
		if ( ! empty( $validator->messages ) ) {
			$html .= '<ul>';
			foreach ( $validator->messages as $message ) {
				$html .= "<li>{$message}</li>";
			}
			$html .= '</ul>';
		}
		$html .= '</td>';
		$html .= '</tr>';

		return $html;
	}
}

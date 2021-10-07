<?php

function get_portfolio_by_id_ajax()
{
	if (!empty(isset($_POST['id']))) {

 		$id = (int) $_POST['id'];


		global $wpdb;

		$results = $wpdb->get_results("SELECT   mkd_portfolio.* FROM mkd_portfolio
	 where mkd_portfolio.user_id = '$user_id'
	 and mkd_portfolio.id = $id");

		echo json_encode([
			'data' => $results
		]);
		exit();
	}
}

?>
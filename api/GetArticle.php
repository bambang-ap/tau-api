<?php
if (checkIfKeyExist($PostData, [])) {
	// if (checkIfKeyExist($PostData, ["from", "limit"])) {
	$length = $db->Execute("SELECT count(*) AS total FROM tb_news", []);
	$data = $db->ExecuteAll("SELECT * FROM tb_news", []);
	// $data = $db->ExecuteAll("SELECT * FROM tb_news LIMIT $PostData->from, $PostData->limit", []);
	$length->data = $data;
	$response->Success($length);
} else {
	$response->Error("Please Check Parameters");
}

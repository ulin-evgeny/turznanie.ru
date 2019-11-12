<?php

class Status {


	const STATUSES_HVB = array(
		Status::STATUS_HIDDEN_VALUE => Status::STATUS_HIDDEN_TITLE,
		Status::STATUS_VISIBLE_VALUE => Status::STATUS_VISIBLE_TITLE,
		Status::STATUS_BANNED_VALUE => Status::STATUS_BANNED_TITLE
	);

	const STATUSES_HV = array(
		Status::STATUS_HIDDEN_VALUE => Status::STATUS_HIDDEN_TITLE,
		Status::STATUS_VISIBLE_VALUE => Status::STATUS_VISIBLE_TITLE
	);

	const STATUS_HIDDEN_VALUE = 0;
	const STATUS_HIDDEN_TITLE = 'Скрыт';
	const STATUS_VISIBLE_VALUE = 1;
	const STATUS_VISIBLE_TITLE = 'Показан';
	const STATUS_BANNED_VALUE = 2;
	const STATUS_BANNED_TITLE = 'Запрещен';

}
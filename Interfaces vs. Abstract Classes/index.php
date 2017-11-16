<?php

/*
interface Providor {

	public function authorize()
}

function login (Providor $providor)

{

	$providor->authorize();
}*/




/////////////////
interface Providor {

	public function getAuthorizationUrl();
}

/*bstract class AbstractProvidor {

	abstract protected function getAuthorizationUrl();

}*/

class FacebookProvidor implements Providor {

	protected function getAuthorizationUrl(){

	}

}
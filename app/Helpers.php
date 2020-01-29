<?php

function setActive($routeName = NULL){
	return request()->routeIs($routeName) ? 'active' : '';
}
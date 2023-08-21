<?php

if(!function_exists('checkRequest')){
function checkRequest($request){
    if($_SERVER['REQUEST_METHOD']=="$request"){
        return true;

}
else {

    return false;
}


}}

if(!function_exists('notNull')){
function notNull($input){
    if(strlen($input)==0){
        return false;
        
    }
    else {
        return true;

}


}}

if(!function_exists('checkEmail')){
function checkEmail($input){
    if(filter_var($input, FILTER_VALIDATE_EMAIL)){
        return true;

}
else {

    return false;
}


}}
if(!function_exists('maxLength')){
function maxLength($input, $length){
    if(strlen($input)<$length){
        return false;
        
    }
    else {
        
        return true;
}


}}
if(!function_exists('minLength')){
function minLength($input, $length){
    if(strlen($input)>$length){
        return false;
        
    }
    else {
        
        return true;
}


}}



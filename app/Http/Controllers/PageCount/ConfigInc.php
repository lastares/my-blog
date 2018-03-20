<?php

namespace App\Http\Controllers\PageCount;
/**
 * Demo of Tongji API
 * set your information such as USERNAME, PASSWORD ... before use
 */
class ConfigInc
{
    //*
    //preLogin,doLogin URL
    const LOGIN_URL = 'https://api.baidu.com/sem/common/HolmesLoginService';

    //Tongji API URL
    const API_URL = 'https://api.baidu.com/json/tongji/v1/ReportService';

    //USERNAME
    const USERNAME = '宋耀锋';

    //PASSWORD
    const PASSWORD = 'Syf291432';

    //TOKEN
    const TOKEN = 'd399de96e966f317d61e916f1df417d7';

    //UUID, used to identify your device, for instance: MAC address
    const UUID = 'd8497d0303212ed5b5bcc2ed0344791b';

    //ACCOUNT_TYPE
    //ZhanZhang:1,FengChao:2,Union:3,Columbus:4
    const ACCOUNT_TYPE = 1;
}



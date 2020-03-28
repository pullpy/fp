<?php
error_reporting(0);
$config = array(
	Coin		=>	"DOGE",	//Coin you Want Use Dice, Example BTC, DASH, LTC, DOGE, ETH, DGB, BCH
	
	Cookie		=>	"__cfduid=d63f8fcabcae9d99a8634bbe2982cc13c1585414054; faucetpay=sfsu00mlobc2rbs8ujafe2i092; _ga=GA1.2.1181608949.1585414052; _gid=GA1.2.50625782.1585414052; remember_me=161871%3Af7b68326816c568c3e5e63a9d155774f03d3c4ed3a54b28dae238f6066f097cb%3A2bb762862acc12fe466640c85a3805c64a7f869adf23db5fed40d41844d974c6; session_token=339ab788b3ca73a1031054eac302b02bdfb0b206e18be8c75c9984af5f7a5ac7; is_chat_hidden=1; cookieconsent_status=dismiss; _gat_gtag_UA_154633790_1=1; sc_is_visitor_unique=rx12149426.1585415421.0EFA669F2CD34F2474186A6B1429FFAC.1.1.1.1.1.1.1.1.1",	//Your Cookie For Login Script
	Name		=>	"FaucetPay Dice, by: KONTOL",
	Base_Bet	=>	"0.001",	//Base Bet For Frist Roll, Example 0.00000001
	
	//Your Win Chance Want use ,Example Min 1 and Max 94
	Min_winChance	=>	"20", //Win Chance Minimum 1
	Max_winChance	=>	"60", //Win Chance Maximum 94
	
	//Change Bet if Lose or If Win, Using Percent
	if_lose		=>	"100", //Change Bet If Lose, Example 100 for 2x Bet if Lose
	if_win		=>	"25", //Change Bet if Win, Example 20 for 0.2x Bet if Win
	
	//Choise 1 for HI ,2 for Low, 3 for Random
	Bet_on		=>	"3", //Only Write 1, 2, or 3
	
	//Refresh to Base Bet if Profit
	Refresh		=>	"0.1", //Refresh if Profit, Example 0.001
	Stop_Profit =>	"20", //Stop If Profit to Target, Example 100.00
	
	//Reset Next if Win 
	Roll_win	=>	"4"	//If Win Bet Change for How Much Roll, Example 1, 2, 3, 4, 5, etc.
	);
$json = json_encode($config);
	
	
	
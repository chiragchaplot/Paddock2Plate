Paddock to Plate
A simple app to track the lifecycle of cattle

Installation
Set Up of Development Environment on Windows Machine

Installing of Dependencies

1.	Install NodeJS
a.	https://www.youtube.com/watch?v=__7eOCxJyow
2.	Install ReactNative CLI
a.	https://www.youtube.com/watch?v=oorfevovPWw&t=1s 
3.	Install VS Code
a.	https://code.visualstudio.com/Download
i.	Upon installing VS Code install the following extensions
1.	React Native Tools
2.	Prettier
3.	React Native/Redux
4.	Material Icon Theme
4.	Install Android Studio
a.	https://www.youtube.com/watch?v=0zx_eFyHRU0
b.	Set up the SDK platform
c.	Set up a virtual device as well

https://reactnative.dev/docs/environment-setup


Setting up of project in react native
1.	Download the source code from the Git Repository
2.	Open the folder in Shell/Terminal
3.	Run npm i
4.	Run npx react-native start
5.	To run the Android Version
a.	Run npx react-native run-android

Usage
Setting up the DB tables

Please run/upload the file cowDB.sql into your SQL or mySQL DB

Setting up the backend APIs

To avoid the hassle of hosting, we are using PHP as our middle ware. The PHP APIs are going to be easy to host on any file hosting server or standard CPANEL or PHPMYADMIN page. 

1.	Please upload the PHP files in the git repository onto you hosting server
2.	Configure the connect.php file to interact with the DB set up in previous step
3.	Test your set up for hosted PHP scripts
a.	If you are storing the php scripts on your domain eg. Chiragchaplot.com then create a folder “paddock2plate” and place all scripts there
b.	Then link to access the script for create record will be www.chiragchaplot.com/paddock2plate/createRecord.php

Updating react native backend to interact with hosted APIs
1.	Update the network layer of the react native app with the updated base URL with the updated file names


Contributing
Guidelines for contributing to the project go here.

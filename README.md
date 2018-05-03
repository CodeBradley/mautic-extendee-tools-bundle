# MauticExtendeeToolsBundle

Extension for Mautic from Extendee family www.extendee.com

## Installation

1. Install by running 
composer require kuzmany/mautic-extendee-tools-bundle

2. Go to Mautic - Plugins and click to the button Install/Upgrade plugins

3. See new integrations 
-- ECronTester
-- EMailTester

## Docs

https://tools.mtcextendee.com/

## Mail Tester

![image](https://user-images.githubusercontent.com/462477/39597632-5c9839aa-4f16-11e8-9fd6-d75c7266eec0.png)

Mautic email spam test by mail-tester.com. 
First 20 tests are free. 

#### How to setup Mail Tester?

1. Just create your account at www.mail-tester.com/manager and setup EMailTester integration
2. Then go to Mautic and see new Spam email test button in email detail
3. Button open new window and redirect to mail-tester result page within few seconds

## Cron Tester

![image](https://user-images.githubusercontent.com/462477/39597689-7e16402c-4f16-11e8-8c72-1e696ddb5e16.png)

Mautic requires a few cron jobs to handle some maintenance tasks. 
This bundle add new buttons execute single cron job:

- Segment rebuild
- Campaign rebuild/trigger
- Send broadcast

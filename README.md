# Innovaphone External Application
A webbased application that allowes the user to open up a custom url or application when a call is accepted.<br/>
We have 2 options regarding the call acceptance:
* Automatically open up a custom url and/or application when a call is answered
* Click a button during a answered call to open up a custom url and/or application<br/>

This choise is configured in the Usage at the **Start with call acceptance** checkbox.

## Usage
Configuration->External Application
```
Name: InsertYourPrefferedName
Path: https://yourdomain.ext/customername/$n
Params: Empty
Start with call acceptance: optional, what the customer preffers.
```

## How to
* Create a customer specific function in class.php
* Edit the current switch in index.php, add your own customer specific case and call your custom function.<br/>
This case is used in de the url, and is case sensitive.

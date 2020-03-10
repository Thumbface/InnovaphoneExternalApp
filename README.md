# Innovaphone External Application


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

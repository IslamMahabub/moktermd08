# GGLink Project

## Installation 

Clone or download the package and rename it gglink,
move the gglink package in root directory packages folder.

Update project composer.json file with

```
"repositories": [
    {
        "type": "path",
        "url": "./packages/CustomAuth"
    }
],
```

Go to terminal and run this command from project root

```
composer require mahabub/gglink
```

after successfully add the package below routes are available 

```
project-url/gglink/login
project-url/gglink/logout
project-url/gglink/profile
project-url/gglink/add-profile
project-url/gglink/update-profile
project-url/gglink/permission
project-url/gglink/settings
project-url/gglink/report
```

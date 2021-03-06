# RedisDesktopManager Native Value Formatters

Native value formatters are scripts or executables developed in different programming languages which allow to display in readable form the key values of various formats inside the RDM value editor. You can easily implement any formatter for your own purposes as well.

![91f4b202-89a4-11e5-8446-b34f21ee9152](https://cloud.githubusercontent.com/assets/1655867/20011127/315cb0c4-a2b3-11e6-8479-ae8a6d030f40.png)

### [API Docs](http://docs.redisdesktop.com/en/latest/native-formatters/)

### Examples

You can find example of native formatter in `php-unserialize` folder

#### Feel free to submit PR with your native formatter to this repo.

# What's this

this can format php serialize data string

# Installation

To install the formatter create formatters/ directory inside of .rdm/ settings directory which is by default located inside of your home directory or by the path you specify as --settings-dir option when you run RESP.app. Then copy formatter's directory into .rdm/formatters/. Or just clone the repository with examples into .rdm/ like shown below.

```
cd ~/.rdm/
git clone https://github.com/RedisDesktop/rdm-native-value-formatters.git formatters
```

# How to Use

Click on the key to open the value editor and choose the appropriate formatter from the "View as:" drop-down menu.

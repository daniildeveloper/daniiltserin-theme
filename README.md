# Creating premium theme for wordpress

## How to

### How to create admin sub pages in admin bar

Slug for menu must be one word or multiply words connected with underscore(not dash).

Create hook in ```functions.php``` or someone connected to it.

```php
//generate sub pages
    //1. string parent slug;
    //2. string page title;
    //3. string menu title
    //4. access level;
    //5. string slug;
    add_submenu_page();
```

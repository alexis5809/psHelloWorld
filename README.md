# psHelloWorld
Module example for OXID 6 using composer merge plugin, instaed installing via packagist/repository/file.
For installation without merge plugin see [packagist](https://github.com/proudcommerce/psHelloWorld/tree/packagist) branch.

## Features
- Overwrites startpage meta title.

## Installation
1. Install composer merge plugin
```
composer require wikimedia/composer-merge-plugin
```
2. Add module to shop composer.json

```
  "extra": {
    "merge-plugin": {
      "include": [
        "source/modules/ps/pshelloworld/composer.json"
      ]
    }
  }
```

3. Update composer installation
```
composer update
```
	
## License
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    

## Copyright
Proud Sourcing GmbH 2017 / www.proudcommerce.com / www.proudsourcing.de

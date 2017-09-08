# upcloud
The UpCloud API consists of operations used to control resources on UpCloud. The API is a web service interface. HTTPS is used to connect to the API. The API follows the principles of a RESTful web service wherever possible. The base URL for all API operations is  https://api.upcloud.com/. All API operations require authentication.

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/upcloud/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Upcloud\ApiClient\Api\AccountApi();

try {
    $result = $api_instance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://api.upcloud.com/1.2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account | Account information
*FirewallApi* | [**createFirewallRule**](docs/Api/FirewallApi.md#createfirewallrule) | **POST** /server/{serverId}/firewall_rule | Create firewall rule
*FirewallApi* | [**deleteFirewallRule**](docs/Api/FirewallApi.md#deletefirewallrule) | **DELETE** /server/{serverId}/firewall_rule/{firewallRuleNumber} | Remove firewall rule
*FirewallApi* | [**getFirewallRule**](docs/Api/FirewallApi.md#getfirewallrule) | **GET** /server/{serverId}/firewall_rule/{firewallRuleNumber} | Get firewall rule details
*FirewallApi* | [**serverServerIdFirewallRuleGet**](docs/Api/FirewallApi.md#serverserveridfirewallruleget) | **GET** /server/{serverId}/firewall_rule | List firewall rules
*IPAddressApi* | [**addIp**](docs/Api/IPAddressApi.md#addip) | **POST** /ip_address | Assign IP address
*IPAddressApi* | [**deleteIp**](docs/Api/IPAddressApi.md#deleteip) | **DELETE** /ip_address/{ip} | Release IP address
*IPAddressApi* | [**getDetails**](docs/Api/IPAddressApi.md#getdetails) | **GET** /ip_address/{ip} | Get IP address details
*IPAddressApi* | [**listIps**](docs/Api/IPAddressApi.md#listips) | **GET** /ip_address | List IP addresses
*IPAddressApi* | [**modifyIp**](docs/Api/IPAddressApi.md#modifyip) | **PUT** /ip_address/{ip} | Modify IP address
*PlanApi* | [**listPlans**](docs/Api/PlanApi.md#listplans) | **GET** /plan | List available plans
*PricesApi* | [**listPrices**](docs/Api/PricesApi.md#listprices) | **GET** /price | List prices
*ServerApi* | [**assignTag**](docs/Api/ServerApi.md#assigntag) | **POST** /server/{serverId}/tag/{tagList} | Assign tag to a server
*ServerApi* | [**attachStorage**](docs/Api/ServerApi.md#attachstorage) | **POST** /server/{serverId}/storage/attach | Attach storage
*ServerApi* | [**createFirewallRule**](docs/Api/ServerApi.md#createfirewallrule) | **POST** /server/{serverId}/firewall_rule | Create firewall rule
*ServerApi* | [**createServer**](docs/Api/ServerApi.md#createserver) | **POST** /server | Create server
*ServerApi* | [**deleteFirewallRule**](docs/Api/ServerApi.md#deletefirewallrule) | **DELETE** /server/{serverId}/firewall_rule/{firewallRuleNumber} | Remove firewall rule
*ServerApi* | [**deleteServer**](docs/Api/ServerApi.md#deleteserver) | **DELETE** /server/{serverId} | Delete server
*ServerApi* | [**detachStorage**](docs/Api/ServerApi.md#detachstorage) | **POST** /server/{serverId}/storage/detach | Detach storage
*ServerApi* | [**ejectCdrom**](docs/Api/ServerApi.md#ejectcdrom) | **POST** /server/{serverId}/storage/cdrom/eject | Eject CD-ROM
*ServerApi* | [**getFirewallRule**](docs/Api/ServerApi.md#getfirewallrule) | **GET** /server/{serverId}/firewall_rule/{firewallRuleNumber} | Get firewall rule details
*ServerApi* | [**listServerConfigurations**](docs/Api/ServerApi.md#listserverconfigurations) | **GET** /server_size | List server configurations
*ServerApi* | [**listServers**](docs/Api/ServerApi.md#listservers) | **GET** /server | List of servers
*ServerApi* | [**loadCdrom**](docs/Api/ServerApi.md#loadcdrom) | **POST** /server/{serverId}/storage/cdrom/load | Load CD-ROM
*ServerApi* | [**modifyServer**](docs/Api/ServerApi.md#modifyserver) | **PUT** /server/{serverId} | Modify server
*ServerApi* | [**restartServer**](docs/Api/ServerApi.md#restartserver) | **POST** /server/{serverId}/restart | Restart server
*ServerApi* | [**serverDetails**](docs/Api/ServerApi.md#serverdetails) | **GET** /server/{serverId} | Get server details
*ServerApi* | [**serverServerIdFirewallRuleGet**](docs/Api/ServerApi.md#serverserveridfirewallruleget) | **GET** /server/{serverId}/firewall_rule | List firewall rules
*ServerApi* | [**startServer**](docs/Api/ServerApi.md#startserver) | **POST** /server/{serverId}/start | Start server
*ServerApi* | [**stopServer**](docs/Api/ServerApi.md#stopserver) | **POST** /server/{serverId}/stop | Stop server
*ServerApi* | [**untag**](docs/Api/ServerApi.md#untag) | **POST** /server/{serverId}/untag/{tagName} | Remove tag from server
*StorageApi* | [**attachStorage**](docs/Api/StorageApi.md#attachstorage) | **POST** /server/{serverId}/storage/attach | Attach storage
*StorageApi* | [**backupStorage**](docs/Api/StorageApi.md#backupstorage) | **POST** /storage/{storageId}/backup | Create backup
*StorageApi* | [**cancelOperation**](docs/Api/StorageApi.md#canceloperation) | **POST** /storage/{storageId}/cancel | Cancel storage operation
*StorageApi* | [**cloneStorage**](docs/Api/StorageApi.md#clonestorage) | **POST** /storage/{storageId}/clone | Clone storage
*StorageApi* | [**createStorage**](docs/Api/StorageApi.md#createstorage) | **POST** /storage | Create storage
*StorageApi* | [**deleteStorage**](docs/Api/StorageApi.md#deletestorage) | **DELETE** /storage/{storageId} | Delete storage
*StorageApi* | [**detachStorage**](docs/Api/StorageApi.md#detachstorage) | **POST** /server/{serverId}/storage/detach | Detach storage
*StorageApi* | [**ejectCdrom**](docs/Api/StorageApi.md#ejectcdrom) | **POST** /server/{serverId}/storage/cdrom/eject | Eject CD-ROM
*StorageApi* | [**favoriteStorage**](docs/Api/StorageApi.md#favoritestorage) | **POST** /storage/{storageId}/favorite | Add storage to favorites
*StorageApi* | [**getStorageDetails**](docs/Api/StorageApi.md#getstoragedetails) | **GET** /storage/{storageId} | Get storage details
*StorageApi* | [**listStorageTypes**](docs/Api/StorageApi.md#liststoragetypes) | **GET** /storage/{type}/ | List of storages by type
*StorageApi* | [**listStorages**](docs/Api/StorageApi.md#liststorages) | **GET** /storage | List of storages
*StorageApi* | [**loadCdrom**](docs/Api/StorageApi.md#loadcdrom) | **POST** /server/{serverId}/storage/cdrom/load | Load CD-ROM
*StorageApi* | [**modifyStorage**](docs/Api/StorageApi.md#modifystorage) | **PUT** /storage/{storageId} | Modify storage
*StorageApi* | [**restoreStorage**](docs/Api/StorageApi.md#restorestorage) | **POST** /storage/{storageId}/restore | Restore backup
*StorageApi* | [**templatizeStorage**](docs/Api/StorageApi.md#templatizestorage) | **POST** /storage/{storageId}/templatize | Templatize storage
*StorageApi* | [**unfavoriteStorage**](docs/Api/StorageApi.md#unfavoritestorage) | **DELETE** /storage/{storageId}/favorite | Remove storage from favorites
*TagApi* | [**assignTag**](docs/Api/TagApi.md#assigntag) | **POST** /server/{serverId}/tag/{tagList} | Assign tag to a server
*TagApi* | [**createTag**](docs/Api/TagApi.md#createtag) | **POST** /tag | Create a new tag
*TagApi* | [**deleteTag**](docs/Api/TagApi.md#deletetag) | **DELETE** /tag/{tagName} | Delete tag
*TagApi* | [**listTags**](docs/Api/TagApi.md#listtags) | **GET** /tag | List existing tags
*TagApi* | [**modifyTag**](docs/Api/TagApi.md#modifytag) | **PUT** /tag/{tagName} | Modify existing tag
*TagApi* | [**untag**](docs/Api/TagApi.md#untag) | **POST** /server/{serverId}/untag/{tagName} | Remove tag from server
*TimezoneApi* | [**listTimezones**](docs/Api/TimezoneApi.md#listtimezones) | **GET** /timezone | List timezones
*ZoneApi* | [**listZones**](docs/Api/ZoneApi.md#listzones) | **GET** /zone | List available zones


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [AddressFamily](docs/Model/AddressFamily.md)
 - [AssignIpResponse](docs/Model/AssignIpResponse.md)
 - [AvailablePlanListResponse](docs/Model/AvailablePlanListResponse.md)
 - [AvailablePlanListResponsePlans](docs/Model/AvailablePlanListResponsePlans.md)
 - [BackupRule](docs/Model/BackupRule.md)
 - [ConfigurationListResponse](docs/Model/ConfigurationListResponse.md)
 - [ConfigurationListResponseServerSizes](docs/Model/ConfigurationListResponseServerSizes.md)
 - [CreateNewTagResponse](docs/Model/CreateNewTagResponse.md)
 - [CreateStorageResponse](docs/Model/CreateStorageResponse.md)
 - [Error](docs/Model/Error.md)
 - [ErrorCode](docs/Model/ErrorCode.md)
 - [ErrorError](docs/Model/ErrorError.md)
 - [ErrorStatus](docs/Model/ErrorStatus.md)
 - [FirewallRule](docs/Model/FirewallRule.md)
 - [FirewallRuleDetailsResponse](docs/Model/FirewallRuleDetailsResponse.md)
 - [FirewallRuleListResponse](docs/Model/FirewallRuleListResponse.md)
 - [FirewallRuleListResponseFirewallRules](docs/Model/FirewallRuleListResponseFirewallRules.md)
 - [IpAddress](docs/Model/IpAddress.md)
 - [IpAddress1](docs/Model/IpAddress1.md)
 - [IpAddressListResponse](docs/Model/IpAddressListResponse.md)
 - [IpAddressListResponseIpAddresses](docs/Model/IpAddressListResponseIpAddresses.md)
 - [Plan](docs/Model/Plan.md)
 - [Price](docs/Model/Price.md)
 - [PriceListResponse](docs/Model/PriceListResponse.md)
 - [PriceListResponsePrice](docs/Model/PriceListResponsePrice.md)
 - [PriceZone](docs/Model/PriceZone.md)
 - [RestartServer](docs/Model/RestartServer.md)
 - [Server](docs/Model/Server.md)
 - [ServerListResponse](docs/Model/ServerListResponse.md)
 - [ServerListResponseServers](docs/Model/ServerListResponseServers.md)
 - [ServerSize](docs/Model/ServerSize.md)
 - [ServerState](docs/Model/ServerState.md)
 - [ServerStorageDevices](docs/Model/ServerStorageDevices.md)
 - [ServerTags](docs/Model/ServerTags.md)
 - [StopServer](docs/Model/StopServer.md)
 - [Storage](docs/Model/Storage.md)
 - [Storage1](docs/Model/Storage1.md)
 - [Storage2](docs/Model/Storage2.md)
 - [Storage3](docs/Model/Storage3.md)
 - [Storage4](docs/Model/Storage4.md)
 - [StorageAccessType](docs/Model/StorageAccessType.md)
 - [StorageBackups](docs/Model/StorageBackups.md)
 - [StorageDevice](docs/Model/StorageDevice.md)
 - [StorageDevice1](docs/Model/StorageDevice1.md)
 - [StorageServers](docs/Model/StorageServers.md)
 - [StorageState](docs/Model/StorageState.md)
 - [StorageTier](docs/Model/StorageTier.md)
 - [StorageType](docs/Model/StorageType.md)
 - [SuccessStoragesResponse](docs/Model/SuccessStoragesResponse.md)
 - [SuccessStoragesResponseStorages](docs/Model/SuccessStoragesResponseStorages.md)
 - [Tag](docs/Model/Tag.md)
 - [Tag1](docs/Model/Tag1.md)
 - [TagListResponse](docs/Model/TagListResponse.md)
 - [TagListResponseTags](docs/Model/TagListResponseTags.md)
 - [TagServers](docs/Model/TagServers.md)
 - [Timezone](docs/Model/Timezone.md)
 - [TimezoneListResponse](docs/Model/TimezoneListResponse.md)
 - [TimezoneListResponseTimezones](docs/Model/TimezoneListResponseTimezones.md)
 - [Zone](docs/Model/Zone.md)
 - [ZoneListResponse](docs/Model/ZoneListResponse.md)
 - [ZoneListResponseZones](docs/Model/ZoneListResponseZones.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




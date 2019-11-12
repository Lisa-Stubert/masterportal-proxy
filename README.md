# masterportal-proxy
Simple php proxy for the masterportal

## How to

When using the proxy, please modify the htaccess so all required domains are shown. The htaccess is also a way of making sure that not every domain can be used.

```
RewriteEngine On
RewriteRule ^fbinter_stadt-berlin_de/(.*)$ /proxy.php?domain=fbinter.stadt-berlin.de&uri=$1 [P,QSA]
RewriteRule ^example-domain_de/(.*)$ /proxy.php?domain=example-domain.de&uri=$1 [P,QSA]
```

If you are loading heavy data sets through the proxy you might need to increase memory and timeout in the proxy.php file.

More info on how to setup your own masterportal instance can be found [here](https://github.com/technologiestiftung/masterportal-howto/blob/master/README.md).
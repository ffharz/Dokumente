#https://blog.netnerds.net/2011/10/openvpn-update-client-dns-on-mac-os-x-using-from-the-command-line/
#Author: Chrissy LeMaire
#@cl at twitter
#!/bin/bash
 
# Set bash delimeter to be line break
IFS=$'\n'
 
# VPN DNS Server
vpndns='10.7.0.10'
 
# Get adapter list
adapters=`networksetup -listallnetworkservices |grep -v denotes`
 
for adapter in $adapters
do
        echo updating dns for $adapter
        dnssvr=(`networksetup -getdnsservers $adapter`)
 
        if [ $dnssvr != $vpndns ]; then
                # set dns server to the vpn dns server
                networksetup -setdnsservers $adapter $vpndns
                else
                # revert back to DHCP assigned DNS Servers
                networksetup -setdnsservers $adapter empty
        fi
done

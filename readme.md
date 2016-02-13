## Mesos Frameworks

## Run staging site (OSX)

Install Homebrew: http://brew.sh/

- Open Terminal
- Run `/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`

Install dnsmasq: http://www.thekelleys.org.uk/dnsmasq/doc.html

- Run `brew up`
- Run `brew install dnsmasq`

Configure dnsmasq

- Edit `/usr/local/etc/dnsmasq.conf` file. 
- Change `address=/double-click.net/127.0.0.1` line with `address=/mesosframeworks.dev/52.19.6.89`.
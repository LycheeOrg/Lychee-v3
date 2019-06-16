# Lychee

[![Release number](https://img.shields.io/github/release/LycheeOrg/Lychee.svg)](https://github.com/LycheeOrg/Lychee/releases)
[![license](https://img.shields.io/github/license/LycheeOrg/Lychee.svg)](https://github.com/LycheeOrg/Lychee/blob/master/LICENSE)
[![Gitter](https://img.shields.io/gitter/room/LycheeOrg/Lobby.svg?logo=gitter)](https://gitter.im/LycheeOrg/Lobby)


#### A great looking and easy-to-use photo-management-system.

*Since the 1st of April 2018 this project has moved to its own Organisation (https://github.com/LycheeOrg) where people are able to submit their fixes to it. We, the Organisation owners, want to thank electerious (Tobias Reich) for the opportunity to make this project live on.*

![Lychee](https://camo.githubusercontent.com/b9010f02c634219795950e034f511f4cf4af5c60/68747470733a2f2f732e656c6563746572696f75732e636f6d2f696d616765732f6c79636865652f312e6a706567)
![Lychee](https://camo.githubusercontent.com/5484591f0b15b6ba27d4845b292cc5d3a988b3b9/68747470733a2f2f732e656c6563746572696f75732e636f6d2f696d616765732f6c79636865652f322e6a706567)

Lychee is a free photo-management tool, which runs on your server or web-space. Installing is a matter of seconds. Upload, manage and share photos like from a native application. Lychee comes with everything you need and all your photos are stored securely. Read more on our [Website](https://LycheeOrg.github.io).

## Installation

To run Lychee, everything you need is a web-server with PHP 7.1 or later and a MySQL database. Follow the instructions to install Lychee on your server. [Installation &#187;](https://github.com/LycheeOrg/Lychee/wiki/Installation)

## How to use

You can use Lychee right after the installation. Here are some advanced features to get the most out of it.

### Settings

Sign in and click the gear in the top left corner to change your settings. If you want to edit them manually: MySQL details are stored in `data/config.php`. Other options and hidden settings are stored directly in the database. [Settings &#187;](https://github.com/LycheeOrg/Lychee/wiki/Settings)

### Update

Updating is as easy as it should be.  [Update &#187;](https://github.com/LycheeOrg/Lychee/wiki/Update)

### Build

Lychee is ready to use, right out of the box. If you want to contribute and edit CSS or JS files, you need to rebuild Lychee. [Build &#187;](https://github.com/LycheeOrg/Lychee/wiki/Build)

### Keyboard Shortcuts

These shortcuts will help you to use Lychee even faster. [Keyboard Shortcuts &#187;](https://github.com/LycheeOrg/Lychee/wiki/Keyboard%20Shortcuts)

### Dropbox import

In order to use the Dropbox import from your server, you need a valid drop-ins app key from [their website](https://www.dropbox.com/developers/apps/create). Lychee will ask you for this key, the first time you try to use the import. Want to change your code? Take a look at [the settings](https://github.com/LycheeOrg/Lychee/wiki/Settings) of Lychee.

### Twitter Cards

Lychee supports [Twitter Cards](https://dev.twitter.com/docs/cards) and [Open Graph](http://opengraphprotocol.org) for shared images ([not albums](https://github.com/electerious/Lychee/issues/384)). In order to use Twitter Cards you need to request an approval for your domain. Simply share an image with Lychee, copy its link and paste it in [Twitters Card Validator](https://dev.twitter.com/docs/cards/validation/validator).

### Imagick

Lychee uses [Imagick](https://www.imagemagick.org) when installed on your server. In this case you will benefit from a faster processing of your uploads, better looking thumbnails and intermediate sized images for small screen devices. You can disable the usage of [Imagick](https://www.imagemagick.org) in [the settings](https://github.com/LycheeOrg/Lychee/wiki/Settings).

### Docker

Browse the [Docker Hub Registry](https://hub.docker.com/r/) for various automated Lychee-Docker builds.
Various docker builds include :
- [LinuxServer.io build](https://hub.docker.com/r/linuxserver/lychee/)
- [ARMHF based Linuxserver.io build](https://hub.docker.com/r/lsioarmhf/lychee/)

### Plugins and Extensions

The plugin system of Lychee allows you to execute scripts when a certain action fires. Plugins are hooks, which are injected directly into Lychee. [Plugin documentation &#187;](https://github.com/LycheeOrg/Lychee/wiki/Plugins)

It's also possible to build extensions upon Lychee. The way to do so isn't documented and can change every time. We recommend using the plugin system, when possible.

Here's a list of all available Plugins and Extensions:

| Name | Description | |
|:-----------|:------------|:------------|
| lycheesync | Sync Lychee with any directory containing photos | [More &#187;](https://github.com/GustavePate/lycheesync) |
| lycheeupload | Upload photos to Lychee via SSH | [More &#187;](https://github.com/r0x0r/lycheeupload) |
| Jekyll | Liquid tag for Jekyll sites that allows embedding Lychee albums | [More &#187;](https://gist.github.com/tobru/9171700) |
| lychee-redirect | Redirect from an album-name to a Lychee-album | [More &#187;](https://github.com/electerious/lychee-redirect) |
| lychee-watermark | Adds a second watermarked photo when uploading images | [More &#187;](https://github.com/electerious/lychee-watermark) |
| lychee-rss | Creates a RSS-Feed out of your photos | [More &#187;](https://github.com/cternes/Lychee-RSS) |
| lychee-FlashAir | Import from a Toshiba FlashAir WiFi SD card | [More &#187;](https://github.com/mhp/Lychee-FlashAir) |
| lychee-webroot | Controls photos accessibility and keeps Lychee files hidden | [More &#187;](https://github.com/Bramas/lychee-webroot) |
| lychee-create-medium | Generate missing medium size photos | [More &#187;](https://github.com/Bramas/lychee-create-medium) |

## Troubleshooting

Take a look at the [FAQ](https://github.com/LycheeOrg/Lychee/wiki/FAQ) if you have problems. Discovered a bug? Please create an issue here on GitHub!


## Thanks to our contributors

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore -->
<table>
  <tr>
    <td align="center"><a href="http://electerious.com"><img src="https://avatars1.githubusercontent.com/u/499088?v=4" width="48px;" alt="Tobias Reich"/><br /><sub><b>Tobias Reich</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=electerious" title="Code">💻</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=electerious" title="Documentation">📖</a> <a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Aelecterious" title="Bug reports">🐛</a> <a href="#design-electerious" title="Design">🎨</a></td>
    <td align="center"><a href="https://github.com/ildyria"><img src="https://avatars3.githubusercontent.com/u/627094?v=4" width="48px;" alt="Benoît Viguier"/><br /><sub><b>Benoît Viguier</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=ildyria" title="Code">💻</a> <a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Aildyria" title="Bug reports">🐛</a> <a href="#design-ildyria" title="Design">🎨</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=ildyria" title="Documentation">📖</a> <a href="#translation-ildyria" title="Translation">🌍</a> <a href="#review-ildyria" title="Reviewed Pull Requests">👀</a></td>
    <td align="center"><a href="http://ludovicrousseau.blogspot.com/"><img src="https://avatars1.githubusercontent.com/u/398496?v=4" width="48px;" alt="Ludovic Rousseau"/><br /><sub><b>Ludovic Rousseau</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=LudovicRousseau" title="Code">💻</a> <a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3ALudovicRousseau" title="Bug reports">🐛</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=LudovicRousseau" title="Documentation">📖</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=LudovicRousseau" title="Tests">⚠️</a> <a href="#review-LudovicRousseau" title="Reviewed Pull Requests">👀</a></td>
    <td align="center"><a href="http://www.clementlamoureux.fr"><img src="https://avatars2.githubusercontent.com/u/2447419?v=4" width="48px;" alt="Clément Lamoureux"/><br /><sub><b>Clément Lamoureux</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=clementlamoureux" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/d7415"><img src="https://avatars3.githubusercontent.com/u/1611702?v=4" width="48px;" alt="d7415"/><br /><sub><b>d7415</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=d7415" title="Code">💻</a> <a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Ad7415" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/bennettscience"><img src="https://avatars3.githubusercontent.com/u/3878010?v=4" width="48px;" alt="Brian"/><br /><sub><b>Brian</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=bennettscience" title="Code">💻</a> <a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Abennettscience" title="Bug reports">🐛</a></td>
  </tr>
  <tr>
    <td align="center"><a href="http://volt.io"><img src="https://avatars2.githubusercontent.com/u/129883?v=4" width="48px;" alt="Hermann Käser"/><br /><sub><b>Hermann Käser</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Ahermzz" title="Bug reports">🐛</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=hermzz" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/deatheguard"><img src="https://avatars1.githubusercontent.com/u/43773363?v=4" width="48px;" alt="Alicia"/><br /><sub><b>Alicia</b></sub></a><br /><a href="#translation-deatheguard" title="Translation">🌍</a></td>
    <td align="center"><a href="http://petergrassberger.com"><img src="https://avatars0.githubusercontent.com/u/666289?v=4" width="48px;" alt="Peter Grassberger"/><br /><sub><b>Peter Grassberger</b></sub></a><br /><a href="#platform-PeterTheOne" title="Packaging/porting to new platform">📦</a></td>
    <td align="center"><a href="https://twitter.com/herald_yu"><img src="https://avatars2.githubusercontent.com/u/3388604?v=4" width="48px;" alt="Herald Yu"/><br /><sub><b>Herald Yu</b></sub></a><br /><a href="#translation-yuhr123" title="Translation">🌍</a> <a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Ayuhr123" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/arxcdr"><img src="https://avatars0.githubusercontent.com/u/34399111?v=4" width="48px;" alt="arxcdr"/><br /><sub><b>arxcdr</b></sub></a><br /><a href="#translation-arxcdr" title="Translation">🌍</a></td>
    <td align="center"><a href="https://github.com/jeyca"><img src="https://avatars0.githubusercontent.com/u/37297730?v=4" width="48px;" alt="jeyca"/><br /><sub><b>jeyca</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Ajeyca" title="Bug reports">🐛</a></td>
  </tr>
  <tr>
    <td align="center"><a href="http://mcesar.nl"><img src="https://avatars2.githubusercontent.com/u/5261909?v=4" width="48px;" alt="Milo Cesar"/><br /><sub><b>Milo Cesar</b></sub></a><br /><a href="#translation-milo526" title="Translation">🌍</a></td>
    <td align="center"><a href="https://github.com/benabbottnz"><img src="https://avatars2.githubusercontent.com/u/2616473?v=4" width="48px;" alt="Ben Abbott"/><br /><sub><b>Ben Abbott</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=benabbottnz" title="Documentation">📖</a></td>
    <td align="center"><a href="https://github.com/bisherbas"><img src="https://avatars3.githubusercontent.com/u/42714627?v=4" width="48px;" alt="Bish Erbas"/><br /><sub><b>Bish Erbas</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Abisherbas" title="Bug reports">🐛</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=bisherbas" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/elias-fauser"><img src="https://avatars1.githubusercontent.com/u/6170129?v=4" width="48px;" alt="Elias"/><br /><sub><b>Elias</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=elias-fauser" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/jobevers"><img src="https://avatars2.githubusercontent.com/u/2380127?v=4" width="48px;" alt="Job Evers‐Meltzer"/><br /><sub><b>Job Evers‐Meltzer</b></sub></a><br /><a href="#platform-jobevers" title="Packaging/porting to new platform">📦</a></td>
    <td align="center"><a href="https://captnemo.in"><img src="https://avatars3.githubusercontent.com/u/584253?v=4" width="48px;" alt="Nemo"/><br /><sub><b>Nemo</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=captn3m0" title="Code">💻</a></td>
  </tr>
  <tr>
    <td align="center"><a href="https://github.com/fly-man-"><img src="https://avatars2.githubusercontent.com/u/115279?v=4" width="48px;" alt="Fly Man"/><br /><sub><b>Fly Man</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=fly-man-" title="Code">💻</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=fly-man-" title="Documentation">📖</a></td>
    <td align="center"><a href="https://edouardmenayde.fr"><img src="https://avatars0.githubusercontent.com/u/6023858?v=4" width="48px;" alt="Edouard Menayde"/><br /><sub><b>Edouard Menayde</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=edouardmenayde" title="Documentation">📖</a></td>
    <td align="center"><a href="https://www.robbertluit.be"><img src="https://avatars3.githubusercontent.com/u/10846766?v=4" width="48px;" alt="Robbert"/><br /><sub><b>Robbert</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=RobLui" title="Documentation">📖</a></td>
    <td align="center"><a href="https://github.com/jimmcslim"><img src="https://avatars1.githubusercontent.com/u/285469?v=4" width="48px;" alt="James Webster"/><br /><sub><b>James Webster</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=jimmcslim" title="Documentation">📖</a></td>
    <td align="center"><a href="http://www.qligier.ch"><img src="https://avatars3.githubusercontent.com/u/3299399?v=4" width="48px;" alt="Quentin Ligier"/><br /><sub><b>Quentin Ligier</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=qligier" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/mhp"><img src="https://avatars1.githubusercontent.com/u/5925?v=4" width="48px;" alt="Michael Procter"/><br /><sub><b>Michael Procter</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=mhp" title="Code">💻</a></td>
  </tr>
  <tr>
    <td align="center"><a href="http://www.script-solution.de"><img src="https://avatars3.githubusercontent.com/u/185603?v=4" width="48px;" alt="Nils Asmussen"/><br /><sub><b>Nils Asmussen</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=hrniels" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/cternes"><img src="https://avatars3.githubusercontent.com/u/928198?v=4" width="48px;" alt="cternes"/><br /><sub><b>cternes</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=cternes" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/cdauth"><img src="https://avatars3.githubusercontent.com/u/1801792?v=4" width="48px;" alt="Candid Dauth"/><br /><sub><b>Candid Dauth</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=cdauth" title="Code">💻</a></td>
    <td align="center"><a href="https://rhurling.de"><img src="https://avatars2.githubusercontent.com/u/840655?v=4" width="48px;" alt="Rouven Hurling"/><br /><sub><b>Rouven Hurling</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=rhurling" title="Code">💻</a></td>
    <td align="center"><a href="http://hoffmanns-eck.blogspot.com/"><img src="https://avatars2.githubusercontent.com/u/432592?v=4" width="48px;" alt="Peter Hoffmann"/><br /><sub><b>Peter Hoffmann</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=HoffmannP" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/djdallmann"><img src="https://avatars1.githubusercontent.com/u/7385812?v=4" width="48px;" alt="djdallmann"/><br /><sub><b>djdallmann</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=djdallmann" title="Code">💻</a></td>
  </tr>
  <tr>
    <td align="center"><a href="https://github.com/bb-Ricardo"><img src="https://avatars0.githubusercontent.com/u/771836?v=4" width="48px;" alt="Ricardo"/><br /><sub><b>Ricardo</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=bb-Ricardo" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/powentan"><img src="https://avatars3.githubusercontent.com/u/168433?v=4" width="48px;" alt="Powen Tan"/><br /><sub><b>Powen Tan</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=powentan" title="Code">💻</a></td>
    <td align="center"><a href="http://renf.red"><img src="https://avatars0.githubusercontent.com/u/3800339?v=4" width="48px;" alt="Renfred Harper"/><br /><sub><b>Renfred Harper</b></sub></a><br /><a href="#platform-renfredxh" title="Packaging/porting to new platform">📦</a></td>
    <td align="center"><a href="https://github.com/dixy"><img src="https://avatars1.githubusercontent.com/u/1023798?v=4" width="48px;" alt="dixy"/><br /><sub><b>dixy</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=dixy" title="Code">💻</a></td>
    <td align="center"><a href="https://tribut.de"><img src="https://avatars2.githubusercontent.com/u/719105?v=4" width="48px;" alt="Felix Eckhofer"/><br /><sub><b>Felix Eckhofer</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=tribut" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/karlak"><img src="https://avatars0.githubusercontent.com/u/591411?v=4" width="48px;" alt="Bocquet Aldric"/><br /><sub><b>Bocquet Aldric</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=karlak" title="Code">💻</a></td>
  </tr>
  <tr>
    <td align="center"><a href="https://matthias-gutjahr.de"><img src="https://avatars3.githubusercontent.com/u/68414?v=4" width="48px;" alt="Matthias Gutjahr"/><br /><sub><b>Matthias Gutjahr</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=mattsches" title="Code">💻</a></td>
    <td align="center"><a href="http://bramas.fr"><img src="https://avatars2.githubusercontent.com/u/835068?v=4" width="48px;" alt="Quentin Bramas"/><br /><sub><b>Quentin Bramas</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=Bramas" title="Code">💻</a></td>
    <td align="center"><a href="http://www.bensnider.com/"><img src="https://avatars2.githubusercontent.com/u/57701?v=4" width="48px;" alt="Ben Snider"/><br /><sub><b>Ben Snider</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=stupergenius" title="Code">💻</a></td>
    <td align="center"><a href="http://pintozzi.com"><img src="https://avatars1.githubusercontent.com/u/39943?v=4" width="48px;" alt="Joseph Pintozzi"/><br /><sub><b>Joseph Pintozzi</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=pyro2927" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/reneluria"><img src="https://avatars3.githubusercontent.com/u/1652160?v=4" width="48px;" alt="Rene Luria"/><br /><sub><b>Rene Luria</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=reneluria" title="Code">💻</a></td>
    <td align="center"><a href="https://nilswindisch.de"><img src="https://avatars3.githubusercontent.com/u/914680?v=4" width="48px;" alt="Nils Windisch"/><br /><sub><b>Nils Windisch</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=nilswindisch" title="Documentation">📖</a></td>
  </tr>
  <tr>
    <td align="center"><a href="http://www.birdwingfx.com"><img src="https://avatars1.githubusercontent.com/u/6484397?v=4" width="48px;" alt="Aron Brown"/><br /><sub><b>Aron Brown</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=birdwing" title="Code">💻</a></td>
    <td align="center"><a href="http://mathieu-leplatre.info"><img src="https://avatars2.githubusercontent.com/u/546692?v=4" width="48px;" alt="Mathieu Leplatre"/><br /><sub><b>Mathieu Leplatre</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=leplatrem" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/Cronos87"><img src="https://avatars1.githubusercontent.com/u/1923206?v=4" width="48px;" alt="Cronos87"/><br /><sub><b>Cronos87</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=Cronos87" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/expiredemulsion"><img src="https://avatars3.githubusercontent.com/u/2619582?v=4" width="48px;" alt="petter"/><br /><sub><b>petter</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Aexpiredemulsion" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/andimachovec"><img src="https://avatars2.githubusercontent.com/u/26166277?v=4" width="48px;" alt="Andi Machovec"/><br /><sub><b>Andi Machovec</b></sub></a><br /><a href="#translation-andimachovec" title="Translation">🌍</a></td>
    <td align="center"><a href="https://github.com/mkiric"><img src="https://avatars2.githubusercontent.com/u/2616406?v=4" width="48px;" alt="mkiric"/><br /><sub><b>mkiric</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=mkiric" title="Code">💻</a></td>
  </tr>
  <tr>
    <td align="center"><a href="https://github.com/pentabion"><img src="https://avatars1.githubusercontent.com/u/8767374?v=4" width="48px;" alt="Dmitry Krylov"/><br /><sub><b>Dmitry Krylov</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=pentabion" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/humantex"><img src="https://avatars0.githubusercontent.com/u/16087649?v=4" width="48px;" alt="humantex"/><br /><sub><b>humantex</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Ahumantex" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/Guimik"><img src="https://avatars1.githubusercontent.com/u/31242178?v=4" width="48px;" alt="Guimik"/><br /><sub><b>Guimik</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3AGuimik" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/colinmcglothlin"><img src="https://avatars2.githubusercontent.com/u/33700226?v=4" width="48px;" alt="colinmcglothlin"/><br /><sub><b>colinmcglothlin</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Acolinmcglothlin" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://tomszilagyi.github.io"><img src="https://avatars0.githubusercontent.com/u/5454768?v=4" width="48px;" alt="Tom Szilagyi"/><br /><sub><b>Tom Szilagyi</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Atomszilagyi" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://cryptomilk.org/"><img src="https://avatars1.githubusercontent.com/u/545480?v=4" width="48px;" alt="Andreas Schneider"/><br /><sub><b>Andreas Schneider</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Acryptomilk" title="Bug reports">🐛</a></td>
  </tr>
  <tr>
    <td align="center"><a href="https://github.com/fatherb"><img src="https://avatars1.githubusercontent.com/u/4437677?v=4" width="48px;" alt="fatherb"/><br /><sub><b>fatherb</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Afatherb" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/lbonnefond"><img src="https://avatars2.githubusercontent.com/u/24911821?v=4" width="48px;" alt="Luc Bonnefond"/><br /><sub><b>Luc Bonnefond</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Albonnefond" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/chrobs"><img src="https://avatars0.githubusercontent.com/u/159185?v=4" width="48px;" alt="Sebastian Chrobak"/><br /><sub><b>Sebastian Chrobak</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Achrobs" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/haivala"><img src="https://avatars2.githubusercontent.com/u/3918267?v=4" width="48px;" alt="Harri Häivälä"/><br /><sub><b>Harri Häivälä</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Ahaivala" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/lord-carlos"><img src="https://avatars2.githubusercontent.com/u/155855?v=4" width="48px;" alt="Carl"/><br /><sub><b>Carl</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Alord-carlos" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/yuukieve"><img src="https://avatars3.githubusercontent.com/u/25443872?v=4" width="48px;" alt="結城イヴ"/><br /><sub><b>結城イヴ</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Ayuukieve" title="Bug reports">🐛</a></td>
  </tr>
  <tr>
    <td align="center"><a href="https://github.com/SerenaButler"><img src="https://avatars3.githubusercontent.com/u/35893306?v=4" width="48px;" alt="Dirk"/><br /><sub><b>Dirk</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3ASerenaButler" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/corrilan"><img src="https://avatars2.githubusercontent.com/u/33758018?v=4" width="48px;" alt="corrilan"/><br /><sub><b>corrilan</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Acorrilan" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/Himself132"><img src="https://avatars2.githubusercontent.com/u/6908830?v=4" width="48px;" alt="Himself132"/><br /><sub><b>Himself132</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3AHimself132" title="Bug reports">🐛</a></td>
    <td align="center"><a href="http://git.forestier.app/HorlogeSkynet"><img src="https://avatars2.githubusercontent.com/u/5331869?v=4" width="48px;" alt="Samuel FORESTIER"/><br /><sub><b>Samuel FORESTIER</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=HorlogeSkynet" title="Documentation">📖</a></td>
    <td align="center"><a href="https://github.com/dswarbrick"><img src="https://avatars0.githubusercontent.com/u/1667905?v=4" width="48px;" alt="Daniel Swarbrick"/><br /><sub><b>Daniel Swarbrick</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Adswarbrick" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/johnnypark"><img src="https://avatars3.githubusercontent.com/u/677127?v=4" width="48px;" alt="Jonas"/><br /><sub><b>Jonas</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=johnnypark" title="Code">💻</a></td>
  </tr>
  <tr>
    <td align="center"><a href="https://github.com/capulo"><img src="https://avatars2.githubusercontent.com/u/25885970?v=4" width="48px;" alt="capulo"/><br /><sub><b>capulo</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Acapulo" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/ezek1el"><img src="https://avatars3.githubusercontent.com/u/15878321?v=4" width="48px;" alt="ezek1el"/><br /><sub><b>ezek1el</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Aezek1el" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/anroth76"><img src="https://avatars0.githubusercontent.com/u/46268227?v=4" width="48px;" alt="anroth76"/><br /><sub><b>anroth76</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=anroth76" title="Code">💻</a></td>
    <td align="center"><a href="https://loh.re"><img src="https://avatars0.githubusercontent.com/u/5897819?v=4" width="48px;" alt="Gabriel"/><br /><sub><b>Gabriel</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3AGabbalo" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/dbw3"><img src="https://avatars2.githubusercontent.com/u/9830202?v=4" width="48px;" alt="dbw3"/><br /><sub><b>dbw3</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Adbw3" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://federicoleva.eu"><img src="https://avatars2.githubusercontent.com/u/901528?v=4" width="48px;" alt="nemobis"/><br /><sub><b>nemobis</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=nemobis" title="Documentation">📖</a></td>
  </tr>
  <tr>
    <td align="center"><a href="https://github.com/roblandry"><img src="https://avatars1.githubusercontent.com/u/1853884?v=4" width="48px;" alt="roblandry"/><br /><sub><b>roblandry</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Aroblandry" title="Bug reports">🐛</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=roblandry" title="Code">💻</a> <a href="#infra-roblandry" title="Infrastructure (Hosting, Build-Tools, etc)">🚇</a></td>
    <td align="center"><a href="https://github.com/mir07"><img src="https://avatars0.githubusercontent.com/u/2576455?v=4" width="48px;" alt="Michael Rasmussen"/><br /><sub><b>Michael Rasmussen</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Amir07" title="Bug reports">🐛</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=mir07" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/kamil4"><img src="https://avatars0.githubusercontent.com/u/16415200?v=4" width="48px;" alt="kamil4"/><br /><sub><b>kamil4</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Akamil4" title="Bug reports">🐛</a> <a href="https://github.com/LycheeOrg/Lychee/commits?author=kamil4" title="Code">💻</a></td>
    <td align="center"><a href="https://www.rw-foto.net"><img src="https://avatars2.githubusercontent.com/u/10488791?v=4" width="48px;" alt="rwa"/><br /><sub><b>rwa</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=guzzisti" title="Code">💻</a> <a href="https://github.com/LycheeOrg/Lychee/issues?q=author%3Aguzzisti" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/copperschnack"><img src="https://avatars3.githubusercontent.com/u/14861913?v=4" width="48px;" alt="copperschnack"/><br /><sub><b>copperschnack</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=copperschnack" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/edoaxyz"><img src="https://avatars2.githubusercontent.com/u/17519322?v=4" width="48px;" alt="Edoardo Grassi"/><br /><sub><b>Edoardo Grassi</b></sub></a><br /><a href="#translation-edoaxyz" title="Translation">🌍</a></td>
  </tr>
  <tr>
    <td align="center"><a href="http://edwardbetts.com/"><img src="https://avatars1.githubusercontent.com/u/3818?v=4" width="48px;" alt="Edward Betts"/><br /><sub><b>Edward Betts</b></sub></a><br /><a href="#translation-EdwardBetts" title="Translation">🌍</a></td>
    <td align="center"><a href="https://github.com/romansirokov"><img src="https://avatars0.githubusercontent.com/u/39767597?v=4" width="48px;" alt="romansirokov"/><br /><sub><b>romansirokov</b></sub></a><br /><a href="https://github.com/LycheeOrg/Lychee/commits?author=romansirokov" title="Code">💻</a></td>
  </tr>
</table>

<!-- ALL-CONTRIBUTORS-LIST:END -->

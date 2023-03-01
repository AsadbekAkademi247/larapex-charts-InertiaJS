<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<p align="center"><a href="https://larapex-charts.netlify.app/" target="_blank"><img src="https://larapex-charts.netlify.app/banner-light.png" width="400" alt="Laravel Logo"></a></p>

# For example laravel jetstream inertia

<p align="center">

[![MadeWithLaravel.com shield](https://madewithlaravel.com/storage/repo-shields/2175-shield.svg)](https://madewithlaravel.com/p/larapex-charts/shield-link)

[![Latest Stable Version](https://poser.pugx.org/arielmejiadev/larapex-charts/v/stable)](https://packagist.org/packages/arielmejiadev/larapex-charts)

[![Total Downloads](https://poser.pugx.org/arielmejiadev/larapex-charts/downloads)](https://packagist.org/packages/arielmejiadev/larapex-charts)

![GitHub Actions](https://github.com/arielmejiadev/larapex-charts/actions/workflows/main.yml/badge.svg)

[![License](https://poser.pugx.org/arielmejiadev/larapex-charts/license)](https://packagist.org/packages/arielmejiadev/larapex-charts)

</p>

A Laravel wrapper for apex charts library Check the documentation on: [Larapex Chart Docs](https://larapex-charts.netlify.app/).

## Installation

Use composer.

```bash
composer require arielmejiadev/larapex-charts
```

```bash
composer require consoletvs/charts
```

```bash
php artisan vendor:publish --tag=charts_config
```

```php
in config/app.php

ConsoleTVs\Charts\ChartsServiceProvider::class,
```

```bash
php artisan vendor:publish --tag=larapex-charts-config
```

```bash
npm install --save apexcharts
```
```bash
npm install --save vue3-apexcharts
```
```js




import './bootstrap';
import '../css/app.css';
import VueApexCharts from "vue3-apexcharts";
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(VueApexCharts)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

```

[![Working with InertiaJS](https://larapex-charts.netlify.app/preview.png)](https://larapex-charts.netlify.app/6-working-with-inertiajs/)

<p align="center"><a href="https://charts.erik.cat"><img height="250" src="https://i.imgur.com/F0PDyYE.png"></a></p>

[![for learning](https://i.imgur.com/F0PDyYE.png)](https://www.codesolutionstuff.com/laravel-9-consoletvs-charts-tutorial-example/)



## Usage

### Basic example

In your controller add:



## Support the project

Hey 👋 thanks for considering making a donation, with these donations I can continue working to contribute to opensource projects.

<a href="https://www.buymeacoffee.com/arielmejiadev">
    <img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=arielmejiadev&button_colour=FF5F5F&font_colour=ffffff&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00">
</a>

## To do for version 4

- [ ] Add blade directive `@apexchartscdn`
- [ ] Add blade directive `@script($chart)`
- [ ] Add a command to generate a blade component with the boilerplate directives just to include it on any blade file.
- [ ] Add a command to generate a vue component with all the boilerplate to just pass a `chart` prop and include the component on any vue component.

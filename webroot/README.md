Base Front-end
==

Você vai precisar
--

Você vai precisar ter instalado
- Sass (depende do ruby)
- GruntJs (depende do NodeJs)
- Compass (depende do Ruby)

Para preparar o GruntJs
---

```sh
npm install grunt --save-dev
npm install grunt-contrib-uglify --save-dev
npm install grunt-contrib-watch --save-dev
grunt
```

Para começar a gerar
---

####Para gerar o css minificado a partir do Sass

```sh
sass --watch vendor/sass:css --style compressed
```

####Para gerar o Javascript Minificado

```sh
grunt watch
```

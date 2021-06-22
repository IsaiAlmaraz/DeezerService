<!doctype html>
<html>
  <head>
    <title>DeezerService</title>
    <style type="text/css">
      body {
	font-family: Trebuchet MS, sans-serif;
	font-size: 15px;
	color: #444;
	margin-right: 24px;
}

h1	{
	font-size: 25px;
}
h2	{
	font-size: 20px;
}
h3	{
	font-size: 16px;
	font-weight: bold;
}
hr	{
	height: 1px;
	border: 0;
	color: #ddd;
	background-color: #ddd;
}

.app-desc {
  clear: both;
  margin-left: 20px;
}
.param-name {
  width: 100%;
}
.license-info {
  margin-left: 20px;
}

.license-url {
  margin-left: 20px;
}

.model {
  margin: 0 0 0px 20px;
}

.method {
  margin-left: 20px;
}

.method-notes	{
	margin: 10px 0 20px 0;
	font-size: 90%;
	color: #555;
}

pre {
  padding: 10px;
  margin-bottom: 2px;
}

.http-method {
 text-transform: uppercase;
}

pre.get {
  background-color: #0f6ab4;
}

pre.post {
  background-color: #10a54a;
}

pre.put {
  background-color: #c5862b;
}

pre.delete {
  background-color: #a41e22;
}

.huge	{
	color: #fff;
}

pre.example {
  background-color: #f3f3f3;
  padding: 10px;
  border: 1px solid #ddd;
}

code {
  white-space: pre;
}

.nickname {
  font-weight: bold;
}

.method-path {
  font-size: 1.5em;
  background-color: #0f6ab4;
}

.up {
  float:right;
}

.parameter {
  width: 500px;
}

.param {
  width: 500px;
  padding: 10px 0 0 20px;
  font-weight: bold;
}

.param-desc {
  width: 700px;
  padding: 0 0 0 20px;
  color: #777;
}

.param-type {
  font-style: italic;
}

.param-enum-header {
width: 700px;
padding: 0 0 0 60px;
color: #777;
font-weight: bold;
}

.param-enum {
width: 700px;
padding: 0 0 0 80px;
color: #777;
font-style: italic;
}

.field-label {
  padding: 0;
  margin: 0;
  clear: both;
}

.field-items	{
	padding: 0 0 15px 0;
	margin-bottom: 15px;
}

.return-type {
  clear: both;
  padding-bottom: 10px;
}

.param-header {
  font-weight: bold;
}

.method-tags {
  text-align: right;
}

.method-tag {
  background: none repeat scroll 0% 0% #24A600;
  border-radius: 3px;
  padding: 2px 10px;
  margin: 2px;
  color: #FFF;
  display: inline-block;
  text-decoration: none;
}

    </style>
  </head>
  <body>
  <h1>DeezerService</h1>
    <div class="app-desc">API de consulta</div>
    <div class="app-desc">More information: <a href="https://github.com/IsaiAlmaraz/arquitectura">https://github.com/IsaiAlmaraz/arquitectura</a></div>
    <div class="app-desc">Contact Info: <a href="isaialmaraz@outlook.es">isaialmaraz@outlook.es</a></div>
    <div class="app-desc">Version: 0.0.1</div>
    <div class="app-desc">BasePath:</div>
    <div class="license-info">MIT</div>
    <div class="license-url">http://opensource.org/licenses/MIT</div>
  <h2>Access</h2>

  <h2><a name="__Methods">Methods</a></h2>
  [ Jump to <a href="#__Models">Models</a> ]

  <h3>Table of Contents </h3>
  <div class="method-summary"></div>
  <h4><a href="#ObtieneTodosLosGeneros">ObtieneTodosLosGeneros</a></h4>
  <ul>
  <li><a href="#apiTodosGenerosGet"><code><span class="http-method">get</span> /api/TodosGeneros</code></a></li>
  </ul>
  <h4><a href="#ObtieneUnArtista">ObtieneUnArtista</a></h4>
  <ul>
  <li><a href="#apiArtistaIdGet"><code><span class="http-method">get</span> /api/Artista/id</code></a></li>
  </ul>
  <h4><a href="#ObtieneUnGenero">ObtieneUnGenero</a></h4>
  <ul>
  <li><a href="#apiGenerosIdGet"><code><span class="http-method">get</span> /api/Generos/id</code></a></li>
  </ul>

  <h1><a name="ObtieneTodosLosGeneros">ObtieneTodosLosGeneros</a></h1>
  <div class="method"><a name="apiTodosGenerosGet"/>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="get"><code class="huge"><span class="http-method">get</span> /api/TodosGeneros</code></pre></div>
    <div class="method-summary">Cosulta todos los generos (<span class="nickname">apiTodosGenerosGet</span>)</div>
    <div class="method-notes"></div>








    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">200</h4>
    Petición éxitosa
        <a href="#"></a>
    <h4 class="field-label">400</h4>
    Error! verifique la ruta
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>
  <h1><a name="ObtieneUnArtista">ObtieneUnArtista</a></h1>
  <div class="method"><a name="apiArtistaIdGet"/>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="get"><code class="huge"><span class="http-method">get</span> /api/Artista/id</code></pre></div>
    <div class="method-summary">Consulta un artista por ID (<span class="nickname">apiArtistaIdGet</span>)</div>
    <div class="method-notes"></div>








    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">200</h4>
    Petición éxitosa
        <a href="#"></a>
    <h4 class="field-label">400</h4>
    Ingrese un id
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>
  <h1><a name="ObtieneUnGenero">ObtieneUnGenero</a></h1>
  <div class="method"><a name="apiGenerosIdGet"/>
    <div class="method-path">
    <a class="up" href="#__Methods">Up</a>
    <pre class="get"><code class="huge"><span class="http-method">get</span> /api/Generos/id</code></pre></div>
    <div class="method-summary">Consulta un genero por ID (<span class="nickname">apiGenerosIdGet</span>)</div>
    <div class="method-notes"></div>








    <!--Todo: process Response Object and its headers, schema, examples -->



    <h3 class="field-label">Responses</h3>
    <h4 class="field-label">200</h4>
    Petición éxitosa
        <a href="#"></a>
    <h4 class="field-label">400</h4>
    Ingrese un id
        <a href="#"></a>
  </div> <!-- method -->
  <hr/>

  <h2><a name="__Models">Models</a></h2>
  [ Jump to <a href="#__Methods">Methods</a> ]

  <h3>Table of Contents</h3>
  <ol>
    <li><a href="#Artista"><code>Artista</code> - </a></li>
    <li><a href="#Genre"><code>Genre</code> - </a></li>
  </ol>

  <div class="model">
    <h3><a name="Artista"><code>Artista</code> - </a> <a class="up" href="#__Models">Up</a></h3>
    <div class='model-description'>Propiedades artista</div>
    <div class="field-items">
      <div class="param">id (optional)</div><div class="param-desc"><span class="param-type"><a href="#long">Long</a></span>  format: int64</div>
    </div>  <!-- field-items -->
  </div>
  <div class="model">
    <h3><a name="Genre"><code>Genre</code> - </a> <a class="up" href="#__Models">Up</a></h3>
    <div class='model-description'>Propiedades de Genre</div>
    <div class="field-items">
      <div class="param">id (optional)</div><div class="param-desc"><span class="param-type"><a href="#long">Long</a></span>  format: int64</div>
    </div>  <!-- field-items -->
  </div>
  </body>
</html>

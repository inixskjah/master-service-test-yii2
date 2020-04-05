
<h1>Test Yii2 app for Master Service</h1>

<h3>Simple random number generation API</h3>

<h4>API Endpoints:</h4>

`POST` <b>/random-number/gen</b> - Generate random number adn store to DB

`GET`  <b>/random-number/get</b> - Get all random numbers list

`GET`  <b>/random-number/get/{id}</b> - Get random number by ID

<h4>Deployment:</h4>

<code>php yii migrate/up<code>
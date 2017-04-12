# PHP & JavaScript - Open API :satellite:
###### Du kan använda det här repots filer som grund för övningen

Innan vi sätter igång med egna databaser tänkte jag att vi skulle se över hur vi kan hämta information från öppna APIer med PHP samt hur JavaScript kan använda sig utav PHP för att ladda innehåll dynamiskt.

## Övning

Ni ska hämta information från ett _öppet API_ på samma sätt som ni gjorde under JavaScript-kursen men nu ska vi leverera innehållet via _PHP_. Ta ett väldigt simpelt API som troligtvis inte ställer till problem, ett superöppet API där man inte måste ha massa special-headers.

För att hämta information från ett API så måste man använda en av dessa metoder:

## `file_get_contents()`

```
$url = '';
$data = file_get_contents($url);

echo $data;
```

Beroende på vad du får tillbaka för data från API:et kan du behöva konvertera den data som returneras med `json_decode` samt `json_encode`:

* [PHP.net: `json_decode`](http://php.net/manual/en/function.json-decode.php)
* [PHP.net: `json_encode`](http://php.net/manual/en/function.json-encode.php)

## `cURL`

`cURL` känns lite mer som `XMLHttpRequest`, lite stökig syntax men fler inställningar. `cURL` går även att använda från terminalen.

```
$url = '';

$ch = curl_init(); //initiate cURL request
curl_setopt($ch, CURLOPT_URL,$url); //set url
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //return content
$data = curl_exec($ch); //execute the request
curl_close($ch); //close the request

echo $data; //return the data

```


### Public APIs

* [**Public APIs** by _toddmotto_ @ GitHub](https://github.com/toddmotto/public-apis)
* [**Public APIs** by _abhishekbanthia_ @ GitHub](https://github.com/abhishekbanthia/Public-APIs)
* [Programmable Web API Directory](https://www.programmableweb.com/category/all/apis)
* [API-katalogen](http://apikatalogen.se/)

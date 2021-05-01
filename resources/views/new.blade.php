<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.5.1/dist/algoliasearch-lite.umd.js" integrity="sha256-EXPXz4W6pQgfYY3yTpnDa3OH8/EPn16ciVsPQ/ypsjk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-instantsearch@3.4.2/dist/vue-instantsearch.js" integrity="sha256-n2IafdANKRLjFjtPQVSQZ6QlxBrYqPDZfi3IkZjDT84=" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default%2CArray.prototype.find%2CArray.prototype.includes%2CPromise%2CObject.assign%2CObject.entries"></script>

</head>
<body>
    <div id="app">
        <ais-instant-search index-name="ikea" v-bind:search-client="searchClient">
            <!-- regular Vue InstantSearch app inside -->
          </ais-instant-search>
          <p>sasa</p>
          

    </div>
    <script>
        Vue.use(VueInstantSearch);
      
        new Vue({
          el: '#app',
          data: {
            searchClient: algoliasearch(
              'VVZG59Q6AZ',
              '304249706dc388f9d647d091dc71d426',
            ),
          },
        });
      </script>
      
      <script src="{{asset('js/app.js')}}"></script>
   

</body>
</html>
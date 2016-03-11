<script>
    //TODO: cambiar esto a auna llamada por ajax, es mas menos feo
    var contents = <?=json_encode(['encuestas' => $encuestas->toArray()]);?>;
</script>
<div class="row" ng-controller="EncuestasModuleController" ng-init="init()">
</div>
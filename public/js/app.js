/**
 * Created by javier on 4/06/17.
 */
var app = angular.module('mostrarModal',[]);

app.controller('modalCtrl', function(){

    $scope.modalShow=false;

    $scope.showModal = function(){

        $scope.modalShow=true;
    }
});
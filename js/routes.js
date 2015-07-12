var ErrorHandler = angular.module('errorHandler',['ngRoute']);

ErrorHandler.config(function($routeProvider) {
$routeProvider.
  when('/', {
    templateUrl: 'templates/login.html',
    controller: 'loginController'
  }).
  when('/register', {
    templateUrl: 'templates/register.html',
    controller: 'registerController'
  }).
  otherwise({
    redirectTo: '/'
  });
});

ErrorHandler.factory('users', function($http){
	return {
	  login: function(user,password){

	    $http.post('php/controllers/login.php',{
	    	user:user,
	    	password:password
	    }).success(function(r){
	    	return r;
	    }).error(function(e){
	  		console.log(e)
	  	})
	  },
	  register: function(user, password, password2){
	  	if (password != password2) {
	  		alert("The passwords are direferent");
	  		return;
	  	};

	  	$http.post("php/controllers/register.php",{
	  		user:user,
	  		password
	  	}).success(function(r){
	  		return r;
	  	}).error(function(e){
	  		console.log(e)
	  	})

	  },
	  	isValidEmail :function(mail){
	    	return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail);
	 	}
	};
});
ErrorHandler.controller('loginController',function($scope, users){
	$scope.welcome="Welcome to login page!"
	$scope.login = function(){
		if (!users.isValidEmail($scope.user)) {
			alert("The email format is not correctly formated");
			return;
		};

		user = $scope.user;
		password = $scope.password;

		if (user && password) {
			users.login(user,password);
		}else{
			console.log(user,password)
			alert("User and password is required");
		}
	}
})

ErrorHandler.controller('registerController',function($scope, users){
	$scope.welcome="Welcome to register page!";
	$scope.register = function(){
		if (!users.isValidEmail($scope.username)) {
			alert("The email format is not correctly formated");
			return;
		};
		alert(users.register($scope.username,$scope.password,$scope.password2));
	}

})
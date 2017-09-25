tidal.controller('SlideController', ['$scope', function($scope) {

  $scope.slides = [
    {
      class: "carousel-item active slide-1",
      ref: "#one!",
      image: 'images/Slides/Disk_Cover.png',
      imageClass: 'cover',
      title: "Action Bronson's Blue Chips 7000.",
      paragraph: "The long awaited Blue Chips sequel; Blue Chips 7000 is finally here.",
      button: "LISTEN TO ALBUM"

    },
    {
      class: "carousel-item slide-2",
      ref: "#two!",
      image: 'images/Slides/Video_Screenshot.png',
      imageClass: 'screenshot',
      title: "Watch exclusive videos.",
      paragraph: "Ut enim ad minim veniam, quis nostrud exercitaon ullamco laboris nisi ut aliquip ex ea.",
      button: "WATCH VIDEOS"
    },
    {
      class: "carousel-item slide-3",
      ref: "#three!",
      image: 'images/Slides/Brush.png',
      imageClass: 'brush',
      title: "Experience Action Bronson live.",
      paragraph: "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nu.",
      button: "BUY TICKETS"
    }
  ]

}]);

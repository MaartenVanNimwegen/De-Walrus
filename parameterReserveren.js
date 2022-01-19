let SearchParams = new URLSearchParams(window.location.search);
let Location = SearchParams.get("location");

let LocationBox = document.getElementById("locatie");

if (Location == "sneek") {
    LocationBox.selectedIndex = 2;
} else if (Location == "leeuwarden") {
    LocationBox.selectedIndex = 1;
}
console.log(Location);
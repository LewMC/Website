function getDownloadCount(asset) {
    fetch('https://service.lewmc.net/download-counter?resource='+ asset)
        .then((response) => response.text())
        .then((result) => {
            console.log(result)
            document.getElementById(asset+'-downloads').innerHTML = JSON.parse(result).data.total;
        })
        .catch((error) => console.error(error));
}
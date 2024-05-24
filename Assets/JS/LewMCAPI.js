function getDownloadCount(asset, id) {
    fetch('/api/lewmc?download-count='+ asset)
        .then((response) => response.text())
        .then((result) => {
            let json = JSON.parse(result);
            document.getElementById(id).innerHTML = json.data.total;
        })
        .catch((error) => console.error(error));
}
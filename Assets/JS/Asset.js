function getModrinthDescription(asset) {
    const requestOptions = {
        method: "GET",
        redirect: "follow"
    };

    fetch('/api/modrinth?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            console.log(result)
            let json = JSON.parse(result);
            document.getElementById('versions').innerHTML = json.game_versions[0]+' - '+json.game_versions[json.game_versions.length - 1];
        })
        .catch((error) => console.error(error));
}
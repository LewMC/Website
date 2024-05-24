function getModrinthDescription(asset) {
    fetch('/api/modrinth?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            console.log(result)
            let json = JSON.parse(result);
            document.getElementById('icon').src = json.icon_url;
            document.getElementById('versions').innerHTML = json.game_versions[0]+' - '+json.game_versions[json.game_versions.length - 1];
            json.body = json.body.replace(new RegExp('\r?\n','g'), '<br>');
            document.getElementById('body').innerHTML = json.body.replace(new RegExp('\\*','g'), '-');
        })
        .catch((error) => console.error(error));
}
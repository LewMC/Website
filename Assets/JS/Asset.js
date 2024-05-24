function getModrinthDescription(asset) {
    fetch('/api/modrinth?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            console.log(result)
            let json = JSON.parse(result);
            document.getElementById('icon').src = json.icon_url;
            document.getElementById('versions').innerHTML = json.game_versions[0]+' - '+json.game_versions[json.game_versions.length - 1];
            json.body = json.body.replace(new RegExp('\r?\n','g'), '<br>');
            json.body = json.body.replace(new RegExp('\\*\\*(.*?)\\*\\*', 'g'), '<strong>$1</strong>');
            json.body = json.body.replace(new RegExp('__(.*?)__', 'g'), '<em>$1</em>');
            json.body = markdownToHeadingHTML(json.body);
            document.getElementById('body').innerHTML = json.body.replace(new RegExp('\\*','g'), '-');
        })
        .catch((error) => console.error(error));
}

const markdownToHeadingHTML = (text) => {
    const headingPattern = /^(#{1,6})\s+(.*)$/gm;  // Regular expression to match # Heading, ## Subheading, etc.
    return text.replace(headingPattern, (match, hashes, content) => {
        const level = hashes.length;  // Determine the heading level based on the number of hashes
        return `<h${level}>${content}</h${level}>`;  // Replace with corresponding <h1> to <h6> tags
    });
};
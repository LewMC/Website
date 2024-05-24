function getModrinthDescription(asset) {
    fetch('/api/modrinth?description='+ asset)
        .then((response) => response.text())
        .then((result) => {
            console.log(result)
            let json = JSON.parse(result);
            document.getElementById('icon').src = json.icon_url;
            document.getElementById('versions').innerHTML = json.game_versions[0]+' - '+json.game_versions[json.game_versions.length - 1];
            document.getElementById('body').innerHTML = markdownToHTML(json.body);
        })
        .catch((error) => console.error(error));
}

const markdownToHTML = (text) => {
    // Convert headings
    const headingPattern = /^(#{1,6})\s+(.*)$/gm;
    text = text.replace(headingPattern, (match, hashes, content) => {
        const level = hashes.length;
        return `<h${level}>${content}</h${level}>`;
    });

    // Convert bold text
    const boldPattern = /\*\*(.*?)\*\*/g;
    text = text.replace(boldPattern, '<strong>$1</strong>');

    // Convert italic text
    const italicPattern = /__(.*?)__/g;
    text = text.replace(italicPattern, '<em>$1</em>');

    return text;
};
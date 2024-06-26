/*
 *   DISCLAIMER: The below function was written using AI.
 *   I don't understand regex :(
 */
const markdownToHTML = (text) => {
    // Convert headings
    const headingPattern = /^(#{1,6})\s+(.*)$/gm;
    text = text.replace(headingPattern, (match, hashes, content) => {
        const level = Math.min(Math.max(hashes.length + 2, 3), 6); // Adjust heading level between 3 and 6
        return `<h${level}>${content}</h${level}>`;
    });

    // Convert bold text
    const boldPattern = /\*\*(.*?)\*\*/g;
    text = text.replace(boldPattern, '<strong>$1</strong>');

    // Convert italic text
    const italicPattern = /__(.*?)__/g;
    text = text.replace(italicPattern, '<em>$1</em>');

    // Convert images
    const imagePattern = /!\[(.*?)\]\((.*?)\)/g;
    text = text.replace(imagePattern, '<img src="$2" alt="$1">');

    // Convert links with class link-inline
    const linkPattern = /\[(.*?)\]\((.*?)\)/g;
    text = text.replace(linkPattern, '<a href="$2" class="link-inline">$1</a>');

    // Convert bullet points
    const bulletPattern = /^\* (.*)$/gm;
    text = text.replace(bulletPattern, '<li>$1</li>');

    // Wrap bullet points in <ul> tags
    const listPattern = /(<li>.*<\/li>)/g;
    text = text.replace(listPattern, '<ul>$1</ul>');

    // Convert single newlines to <br> for line breaks
    text = text.replace(/\n/g, '<br>');

    // Convert multiple <ul> tags to a single <ul> block
    text = text.replace(/<\/ul><br><ul>/g, '');

    return text;
};
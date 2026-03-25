function analyzeText() {
  let text = document.getElementById("textInput").value;
  let outputDiv = document.getElementById("output");

  let trimmedText = text.trim();

  if (trimmedText === "") {
    outputDiv.innerHTML = "<p class='error'>Please enter some text.</p>";
    return;
  }

  // Character count
  let charCount = text.length;

  // Word count (handles multiple spaces)
  let words = trimmedText.split(/\s+/);
  let wordCount = words.length;

  // Reverse text
  let reversedText = text.split("").reverse().join("");

  outputDiv.innerHTML = `
    <p><strong>Total Characters:</strong> ${charCount}</p>
    <p><strong>Total Words:</strong> ${wordCount}</p>
    <p><strong>Reversed Text:</strong><br>${reversedText}</p>
  `;
}
document.addEventListener('DOMContentLoaded', () => {
    const pageTitle = document.getElementById('pageTitle');
    const pageText = document.getElementById('pageText');
    const pageButtons = document.querySelectorAll('.navbutton');

    async function fetchPageData(pageNumber) {
        try {
            const response = await fetch('trendsUser.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `pageNumber=${pageNumber}`,
            });

            const data = await response.json();

            if (data.title) {
                pageTitle.textContent = data.title;
            } else {
                pageTitle.textContent = '';
            }

            if (data.text) {
                pageText.textContent = data.text;
            } else {
                pageText.textContent = '';
            }
        } catch (error) {
            console.error('Ошибка:', error);
        }
    }

    pageButtons.forEach(button => {
        button.addEventListener('click', () => {
            const pageNumber = button.getAttribute('data-page');
            fetchPageData(pageNumber).then(() => {

            }).catch(error => {
                console.error('Ошибка:', error);
            });
        });
    });


    fetchPageData(1).catch(error => {
        console.error('Ошибка:', error);
    });
});

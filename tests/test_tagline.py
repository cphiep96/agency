import os
import unittest
from bs4 import BeautifulSoup

class TestTagline(unittest.TestCase):
    @classmethod
    def setUpClass(cls):
        html_path = os.path.join(os.path.dirname(os.path.dirname(__file__)), 'index.html')
        with open(html_path, encoding='utf-8') as f:
            cls.soup = BeautifulSoup(f, 'html.parser')

    def test_tagline_phrase_present(self):
        text = self.soup.get_text()
        self.assertIn('TÍN NHIỆM', text)

    def test_partner_slides_count(self):
        carousel = self.soup.find(id='partnersCarousel')
        self.assertIsNotNone(carousel, 'partnersCarousel element not found')
        slides = carousel.find_all('div', class_='w-full flex-shrink-0 px-4', recursive=False)
        self.assertEqual(len(slides), 2)

if __name__ == '__main__':
    unittest.main()

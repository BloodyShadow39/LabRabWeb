import { test, expect } from '@playwright/test';

test('Не введено название валюты для создания', async ({ page }) => {
  await page.goto('http://192.168.1.63/edit.php?currency=');
  await page.getByText('Ошибка! Введите название валюты').click();
  await expect (page.locator("body")).toHaveText('Ошибка! Введите название валюты');
});
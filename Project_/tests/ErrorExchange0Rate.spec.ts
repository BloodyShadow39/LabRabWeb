import { test, expect } from '@playwright/test';

test('Ошибка Обмена Валюты при количестве 0 единиц', async ({ page }) => {
  await page.goto('http://192.168.1.63/');
  await page.getByText('Количество').click();
  await page.getByLabel('Количество').click();
  await page.getByLabel('Количество').fill('0');
  await page.getByLabel('В валюту Австралийский Доллар Болгарский Лев Бразильский Реал Канадский Доллар Ш').selectOption('EUR');
  await page.getByRole('button', { name: 'Конвектировать' }).click();
  await expect (page.locator("body")).toHaveText("Введите количество обмениваемой валюты");
});
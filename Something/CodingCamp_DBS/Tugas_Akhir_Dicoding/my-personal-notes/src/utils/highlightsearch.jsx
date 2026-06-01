/**
 * Utility untuk highlighting kata kunci dalam teks
 * Mengembalikan JSX dengan elemen <mark> untuk kata yang cocok
 */

export const highlightKeyword = (text, keyword) => {
  if (!keyword || keyword.trim() === '') {
    return text;
  }

  const parts = text.split(new RegExp(`(${keyword})`, 'gi'));
  
  return (
    <>
      {parts.map((part, index) => 
        part.toLowerCase() === keyword.toLowerCase() ? (
          <mark key={index}>{part}</mark>
        ) : (
          <span key={index}>{part}</span>
        )
      )}
    </>
  );
};

/**
 * Format bulan-tahun untuk grouping dengan data-testid
 */
export const getMonthYearKey = (date) => {
  const d = new Date(date);
  const month = (d.getMonth() + 1).toString().padStart(2, '0');
  const year = d.getFullYear();
  return `${year}-${month}`;
};

/**
 * Format bulan-tahun untuk tampilan user-friendly
 */
export const formatMonthYear = (date) => {
  return new Date(date).toLocaleDateString('id-ID', {
    year: 'numeric',
    month: 'long',
  });
};

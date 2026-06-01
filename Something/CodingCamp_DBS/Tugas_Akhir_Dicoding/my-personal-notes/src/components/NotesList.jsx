import React from 'react';
import NoteItem from './NoteItem';
import { getMonthYearKey, formatMonthYear } from '../utils/highlightsearch.jsx';

function NotesList({ notes, onDelete, onArchive, dataTestId = 'notes-list', searchKeyword = '' }) {
  // TODO [Basic] validasi notes agar tidak kosong.
  const hasNotes = notes && notes.length > 0;

  if (!hasNotes) {
    return (
      <div className="notes-list" data-testid={dataTestId}>
        {/* TODO [Basic] tampilkan pesan kosong yang informatif ketika tidak ada catatan. */}
        <p
          className="notes-list__empty-message"
          data-testid={`${dataTestId}-empty`}
        >
          Tidak ada catatan
        </p>
      </div>
    );
  }

  // TODO [Advanced] kelompokkan catatan per bulan-tahun dan render tiap grup dalam <section className="notes-group">.
  const groupedNotes = notes.reduce((groups, note) => {
    const monthYearKey = getMonthYearKey(note.createdAt);

    if (!groups[monthYearKey]) {
      groups[monthYearKey] = [];
    }
    groups[monthYearKey].push(note);
    return groups;
  }, {});

  return (
    <div className="notes-list notes-list--grouped" data-testid={dataTestId}>
      {Object.entries(groupedNotes).map(([monthYearKey, groupedNotesData]) => (
        <section 
          key={monthYearKey} 
          className="notes-group"
          data-testid={`${monthYearKey}-group`}
        >
          <div className="notes-group__header">
            <h3 className="notes-group__title">
              {formatMonthYear(groupedNotesData[0].createdAt)}
            </h3>
            <span 
              className="notes-group__count"
              data-testid={`${monthYearKey}-group-count`}
            >
              {groupedNotesData.length}
            </span>
          </div>
          <div className="notes-group__items">
            {/* TODO [Basic] gunakan array.map untuk merender NoteItem untuk setiap catatan. */}
            {/* TODO [Skilled] ekstrak tombol aksi menjadi komponen reusable agar dipakai NoteItem. */}
            {groupedNotesData.map((note) => (
              <NoteItem
                key={note.id}
                note={note}
                onDelete={onDelete}
                onArchive={onArchive}
                searchKeyword={searchKeyword}
              />
            ))}
          </div>
        </section>
      ))}
    </div>
  );
}

export default NotesList;

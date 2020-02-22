-- Table: public.messages

-- DROP TABLE public.messages;

CREATE TABLE public.messages
(
    id integer NOT NULL DEFAULT nextval('messages_id_seq'::regclass),
    message character varying(4096) COLLATE pg_catalog."default",
    pm character(1) COLLATE pg_catalog."default",
    recipient character varying(16) COLLATE pg_catalog."default",
    "time" integer,
    author character varying(16) COLLATE pg_catalog."default",
    CONSTRAINT messages_pkey PRIMARY KEY (id),
    CONSTRAINT author FOREIGN KEY (author)
        REFERENCES public.members (username) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT recipient FOREIGN KEY (recipient)
        REFERENCES public.members (username) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)
WITH (
    OIDS = FALSE
)
TABLESPACE pg_default;

ALTER TABLE public.messages
    OWNER to xlyavewwvaqkzy;

-- Index: fki_recipient

-- DROP INDEX public.fki_recipient;

CREATE INDEX fki_recipient
    ON public.messages USING btree
    (recipient COLLATE pg_catalog."default" ASC NULLS LAST)
    TABLESPACE pg_default;


-- Index: fki_username

-- DROP INDEX public.fki_username;

CREATE INDEX fki_username
    ON public.messages USING btree
    (author COLLATE pg_catalog."default" ASC NULLS LAST)
    TABLESPACE pg_default;